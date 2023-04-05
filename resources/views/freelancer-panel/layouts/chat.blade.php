@extends('freelancer-panel/layouts/app')
@section('content')


   @include('freelancer-panel/layouts/asidebarMain')
   <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<div class="row">
	<div class="col-sm-4 col-lg-3">
		<div class="card">
			<div class="card-header"><b>Connected User</b></div>
			<div class="card-body" id="user_list">
				
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-lg-6">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col col-md-6" id="chat_header"><b>Chat Area</b></div>
					<div class="col col-md-6" id="close_chat_area"></div>
				</div>
			</div>
			<div class="card-body" id="chat_area">
				
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-lg-3">
		<div class="card" style="height:255px; overflow-y: scroll;">
			<div class="card-header">
				<input type="text" class="form-control" placeholder="Search User..." autocomplete="off" id="search_people" onkeyup="search_user('{{ Auth::id() }}', this.value);" />
			</div>
			<div class="card-body">
				<div id="search_people_area" class="mt-3"></div>
			</div>
		</div>
		<br />
		<div class="card" style="height:255px; overflow-y: scroll;">
			<div class="card-header"><b>Notification</b></div>
			<div class="card-body">
				<ul class="list-group" id="notification_area">
					
				</ul>
			</div>
		</div>
	</div>
</div>







		<!-- /.content -->
	  </div>
  </div>
   </div>
<!-- ./wrapper -->
@endsection
<style>

#chat_area
{
	min-height: 500px;
	/*overflow-y: scroll*/;
}

#chat_history
{
	min-height: 500px; 
	max-height: 500px; 
	overflow-y: scroll; 
	margin-bottom:16px; 
	background-color: #ece5dd;
	padding: 16px;
}

#user_list
{
	min-height: 500px; 
	max-height: 500px; 
	overflow-y: scroll;
}
</style>
<script>

var conn = new WebSocket('ws://127.0.0.1:8090/?token={{ Auth::user()->token }}');
var tokens= "{{ Auth::user()->token }}";

var from_user_id = "{{ Auth::user()->id }}";


var to_user_id = "";

console.log(tokens);
conn.onopen = function(e){
	
	console.log(from_user_id);
	console.log("Connection established!");

	load_unconnected_user(from_user_id);
	

	load_unread_notification(from_user_id);

	load_connected_chat_user(from_user_id);

};

conn.onmessage = function(e){

	var data = JSON.parse(e.data);

	if(data.image_link)
	{
		//Display Code for uploaded Image

		document.getElementById('message_area').innerHTML = `<img src="{{ asset('admin/images/avatar/`+data.image_link+`') }}" class="img-thumbnail img-fluid" />`;
	}

	if(data.status)
	{
		var online_status_icon = document.getElementsByClassName('online_status_icon');

		for(var count = 0; count < online_status_icon.length; count++)
		{
			if(online_status_icon[count].id == 'status_'+data.id)
			{
				if(data.status == 'Online')
				{
					online_status_icon[count].classList.add('text-success');

					online_status_icon[count].classList.remove('text-danger');

					document.getElementById('last_seen_'+data.id+'').innerHTML = 'Online';
				}
				else
				{
					online_status_icon[count].classList.add('text-danger');

					online_status_icon[count].classList.remove('text-success');

					document.getElementById('last_seen_'+data.id+'').innerHTML = data.last_seen;
				}
			}
		}
	}

	if(data.response_load_unconnected_user || data.response_search_user)
	{
		var html = '';

		if(data.data.length > 0)
		{
			html += '<ul class="list-group">';

			for(var count = 0; count < data.data.length; count++)
			{
				var user_image = '';

				if(data.data[count].user_image != '')
				{
					user_image = `<img src="{{ asset('admin/images/avatar/') }}/`+data.data[count].user_image+`" width="40" class="rounded-circle" />`;
				}
				else
				{
					user_image = `<img src="{{ asset('admin/admin/images/avatar/avatar//no-image.jpg') }}" width="40" class="rounded-circle" />`
				}

				html += `
				<li class="list-group-item">
					<div class="row">
						<div class="col col-9">`+user_image+`<b style="color:white;"> &nbsp;`+data.data[count].name+`</b></div>
						<div class="col col-3">
							<button type="button" name="send_request" class="btn btn-primary btn-sm float-end" onclick="send_request(this, `+from_user_id+`, `+data.data[count].id+`)"><i class="fas fa-paper-plane"></i></button>
						</div>
					</div>
				</li>
				`;
			}

			html += '</ul>';
		}
		else
		{
			html = 'No User Found';
		}

		document.getElementById('search_people_area').innerHTML = html;
	}

	if(data.response_from_user_chat_request)
	{
		search_user(from_user_id, document.getElementById('search_people').value);

		load_unread_notification(from_user_id);
	}

	if(data.response_to_user_chat_request)
	{
		load_unread_notification(data.user_id);
	}

	if(data.response_load_notification)
	{
		var html = '';

		for(var count = 0; count < data.data.length; count++)
		{
			var user_image = '';

			if(data.data[count].user_image != '')
			{
				user_image = `<img src="{{ asset('admin/images/avatar/') }}/`+data.data[count].user_image+`" width="40" class="rounded-circle" />`;
			}
			else
			{
				user_image = `<img src="{{ asset('admin/images/avatar/no-image.jpg') }}" width="40" class="rounded-circle" />`;
			}

			html += `
			<li class="list-group-item">
				<div class="row">
					<div class="col col-8">`+user_image+`&nbsp;`+data.data[count].name+`</div>
					<div class="col col-4">
			`;
			if(data.data[count].notification_type == 'Send Request')
			{
				if(data.data[count].status == 'Pending')
				{
					html += '<button type="button" name="send_request" class="btn btn-dark btn-sm float-end">Request Send</button>';
				}
				else
				{
					html += '<button type="button" name="send_request" class="btn btn-danger btn-sm float-end">Request Rejected</button>';
				}
			}
			else
			{
				if(data.data[count].status == 'Pending')
				{
					html += '<button type="button" class="btn btn-danger btn-sm float-end" onclick="process_chat_request('+data.data[count].id+', '+data.data[count].from_user_id+', '+data.data[count].to_user_id+', `Reject`)"><i class="fas fa-times"></i></button>&nbsp;';
					html += '<button type="button" class="btn btn-success btn-sm float-end" onclick="process_chat_request('+data.data[count].id+', '+data.data[count].from_user_id+', '+data.data[count].to_user_id+', `Approve`)"><i class="fas fa-check"></i></button>';
				}
				else
				{
					html += '<button type="button" name="send_request" class="btn btn-danger btn-sm float-end">Request Rejected</button>';
				}
			}

			html += `
					</div>
				</div>
			</li>
			`;
		}

		document.getElementById('notification_area').innerHTML = html;
	}

	if(data.response_process_chat_request)
	{
		load_unread_notification(data.user_id);

		load_connected_chat_user(data.user_id);
	}

	if(data.response_connected_chat_user)
	{
		var html = '<div class="list-group">';

		if(data.data.length > 0)
		{
			for(var count = 0; count < data.data.length; count++)
			{
				html += `
				<a href="#" class="list-group-item d-flex justify-content-between align-items-start" onclick="make_chat_area(`+data.data[count].id+`, '`+data.data[count].name+`'); load_chat_data(`+from_user_id+`, `+data.data[count].id+`); ">
					<div class="ms-2 me-auto">
				`;

				var last_seen = '';

				if(data.data[count].user_status == 'Online')
				{
					html += '<span class="text-success online_status_icon" id="status_'+data.data[count].id+'"><i class="fas fa-circle"></i></span>';

					last_seen = 'Online';
				}
				else
				{
					html += '<span class="text-danger online_status_icon" id="status_'+data.data[count].id+'"><i class="fas fa-circle"></i></span>';

					last_seen = data.data[count].last_seen;
				}

				var user_image = '';

				if(data.data[count].user_image != '')
				{
					user_image = `<img src="{{ asset('admin/images/avatar/') }}/`+data.data[count].user_image+`" width="35" class="rounded-circle" />`;
				}
				else
				{
					user_image = `<img src="{{ asset('admin/images/avatar/no-image.jpg') }}" width="35" class="rounded-circle" />`;
				}



				html += `
						&nbsp; `+user_image+`&nbsp;<b>`+data.data[count].name+`</b>
						<div class="text-right"><small class="text-muted last_seen" id="last_seen_`+data.data[count].id+`">`+last_seen+`</small></div>
					</div>
					<span class="user_unread_message" data-id="`+data.data[count].id+`" id="user_unread_message_`+data.data[count].id+`"></span>
				</a>
				`;
			}
		}
		else
		{
			html += 'No User Found';
		}

		html += '</div>';

		document.getElementById('user_list').innerHTML = html;

		check_unread_message();
	}

	if(data.message)
	{
		var html = '';

		if(data.from_user_id == from_user_id)
		{

			var icon_style = '';

			if(data.message_status == 'Not Send')
			{
				icon_style = '<span id="chat_status_'+data.chat_message_id+'" class="float-end"><i class="fas fa-check text-muted"></i></span>';
			}
			if(data.message_status == 'Send')
			{
				icon_style = '<span id="chat_status_'+data.chat_message_id+'" class="float-end"><i class="fas fa-check-double text-muted"></i></span>';
			}

			if(data.message_status == 'Read')
			{
				icon_style = '<span class="text-primary float-end" id="chat_status_'+data.chat_message_id+'"><i class="fas fa-check-double"></i></span>';
			}

			html += `
			<div class="row">
				<div class="col col-3">&nbsp;</div>
				<div class="col col-9 alert alert-success text-dark shadow-sm">
					`+data.message+ icon_style +`
				</div>
			</div>
			`;
		}
		else
		{
			if(to_user_id != '')
			{
				html += `
				<div class="row">
					<div class="col col-9 alert alert-light text-dark shadow-sm">
					`+data.message+`
					</div>
				</div>
				`;

				update_message_status(data.chat_message_id, from_user_id, to_user_id, 'Read');
			}
			else
			{
				var count_unread_message_element = document.getElementById('user_unread_message_'+data.from_user_id+'');
            	if(count_unread_message_element)
            	{
	            	var count_unread_message = count_unread_message_element.textContent;
	            	if(count_unread_message == '')
	            	{
	            		count_unread_message = parseInt(0) + 1;
	            	}
	            	else
	            	{
	            		count_unread_message = parseInt(count_unread_message) + 1;
	            	}
	            	count_unread_message_element.innerHTML = '<span class="badge bg-primary rounded-pill">'+count_unread_message+'</span>';

	            	update_message_status(data.chat_message_id, data.from_user_id, data.to_user_id, 'Send');
	            }
			}
			
		}

		if(html != '')
		{
			var previous_chat_element = document.querySelector('#chat_history');

			var chat_history_element = document.querySelector('#chat_history');

			chat_history_element.innerHTML = previous_chat_element.innerHTML + html;
			scroll_top();
		}
		
	}

	if(data.chat_history)
	{
		var html = '';

		for(var count = 0; count < data.chat_history.length; count++)
		{
			if(data.chat_history[count].from_user_id == from_user_id)
			{
				var icon_style = '';

				if(data.chat_history[count].message_status == 'Not Send')
				{
					icon_style = '<span id="chat_status_'+data.chat_history[count].id+'" class="float-end"><i class="fas fa-check text-muted"></i></span>';
				}

				if(data.chat_history[count].message_status == 'Send')
				{
					icon_style = '<span id="chat_status_'+data.chat_history[count].id+'" class="float-end"><i class="fas fa-check-double text-muted"></i></span>';
				}

				if(data.chat_history[count].message_status == 'Read')
				{
					icon_style = '<span class="text-primary float-end" id="chat_status_'+data.chat_history[count].id+'"><i class="fas fa-check-double"></i></span>';
				}

				html +=`
				<div class="row">
					<div class="col col-3">&nbsp;</div>
					<div class="col col-9 alert alert-success font-large shadow-sm">
					`+data.chat_history[count].chat_message+ icon_style + `
					</div>
				</div>
				`;

				
			}
			else
			{
				if(data.chat_history[count].message_status != 'Read')
				{
					update_message_status(data.chat_history[count].id, data.chat_history[count].from_user_id, data.chat_history[count].to_user_id, 'Read');
				}

				html += `
				<div class="row">
					<div class="col col-9 alert alert-light font-large shadow-sm">
					`+data.chat_history[count].chat_message+`
					</div>
				</div>
				`;

				var count_unread_message_element = document.getElementById('user_unread_message_'+data.chat_history[count].from_user_id+'');

                if(count_unread_message_element)
                {
                	count_unread_message_element.innerHTML = '';
                }
			}
		}

		document.querySelector('#chat_history').innerHTML = html;

		scroll_top();
	}

	if(data.update_message_status)
	{
		var chat_status_element = document.querySelector('#chat_status_'+data.chat_message_id+'');

		if(chat_status_element)
		{
			if(data.update_message_status == 'Read')
			{
				chat_status_element.innerHTML = '<i class="fas fa-check-double text-primary"></i>';
			}
			if(data.update_message_status == 'Send')
			{
				chat_status_element.innerHTML = '<i class="fas fa-check-double text-muted"></i>';
			}
		}

		if(data.unread_msg)
		{
			var count_unread_message_element = document.getElementById('user_unread_message_'+data.from_user_id+'');

			if(count_unread_message_element)
			{
				var count_unread_message = count_unread_message_element.textContent;
				
				if(count_unread_message == '')	
				{
					count_unread_message = parseInt(0) + 1;
				}
				else
				{
					count_unread_message = parseInt(count_unread_message) + 1;
				}

				count_unread_message_element.innerHTML = '<span class="badge bg-danger rounded-pill">'+count_unread_message+'</span>';
			}
		}
	}
};

function scroll_top()
{
    document.querySelector('#chat_history').scrollTop = document.querySelector('#chat_history').scrollHeight;
}

function load_unconnected_user(from_user_id)
{
	var data = {
		from_user_id : from_user_id,
		type : 'request_load_unconnected_user'
	};
console.log('load_unconnected_user');
	conn.send(JSON.stringify(data));
}

function search_user(from_user_id, search_query)
{
	if(search_query.length > 0)
	{
		var data = {
			from_user_id : from_user_id,
			search_query : search_query,
			type : 'request_search_user'
		};

		conn.send(JSON.stringify(data));
	}
	else
	{
		load_unconnected_user(from_user_id);
	}
}

function send_request(element, from_user_id, to_user_id)
{
	var data = {
		from_user_id : from_user_id,
		to_user_id : to_user_id,
		type : 'request_chat_user'
	};

	element.disabled = true;

	conn.send(JSON.stringify(data));
}

function load_unread_notification(user_id)
{
	var data = {
		user_id : user_id,
		type : 'request_load_unread_notification'
	};

	conn.send(JSON.stringify(data));

}

function process_chat_request(chat_request_id, from_user_id, to_user_id, action)
{
	var data = {
		chat_request_id : chat_request_id,
		from_user_id : from_user_id,
		to_user_id : to_user_id,
		action : action,
		type : 'request_process_chat_request'
	};

	conn.send(JSON.stringify(data));
}

function load_connected_chat_user(from_user_id)
{
	var data = {
		from_user_id : from_user_id,
		type : 'request_connected_chat_user'
	};

	conn.send(JSON.stringify(data));
}

function make_chat_area(user_id, to_user_name)
{
	var html = `
	<div id="chat_history"></div>
	<div class="input-group mb-3">
		<div id="message_area" class="form-control" contenteditable style="min-height:125px; border:1px solid #ccc; border-radius:5px;"></div>
		<label class="btn btn-dark" style="line-height:125px;">
			<i class="fas fa-upload"></i> <input type="file" id="browse_image" onchange="upload_image()" hidden />
		</label>
		<button type="button" class="btn-sm btn-success font-large my-2 mx-2" id="send_button" onclick="send_chat_message()"><i class="fas fa-paper-plane"></i></button>
	</div>
	`;

	document.getElementById('chat_area').innerHTML = html;

	document.getElementById('chat_header').innerHTML = 'Chat with <b>'+to_user_name+'</b>';

	document.getElementById('close_chat_area').innerHTML = '<button type="button" id="close_chat" class="btn btn-danger btn-sm float-end" onclick="close_chat();"><i class="fas fa-times"></i></button>';

	to_user_id = user_id;
}

function close_chat()
{
	document.getElementById('chat_header').innerHTML = 'Chat Area';

	document.getElementById('close_chat_area').innerHTML = '';

	document.getElementById('chat_area').innerHTML = '';

	to_user_id = '';
}

function send_chat_message()
{
	document.querySelector('#send_button').disabled = true;

	var message = document.getElementById('message_area').innerHTML.trim();

	var data = {
		message : message,
		from_user_id : from_user_id,
		to_user_id : to_user_id,
		type : 'request_send_message'
	};

	conn.send(JSON.stringify(data));

	document.querySelector('#message_area').innerHTML = '';

	document.querySelector('#send_button').disabled = false;
}

function load_chat_data(from_user_id, to_user_id)
{
	var data = {
		from_user_id : from_user_id,
		to_user_id : to_user_id,
		type : 'request_chat_history'
	};

	conn.send(JSON.stringify(data));
}

function update_message_status(chat_message_id, from_user_id, to_user_id, chat_message_status)
{
	var data = {
		chat_message_id : chat_message_id,
		from_user_id : from_user_id,
		to_user_id : to_user_id,
		chat_message_status : chat_message_status,
		type : 'update_chat_status'
	};

	conn.send(JSON.stringify(data));
}

function check_unread_message()
{
	var unread_element = document.getElementsByClassName('user_unread_message');

	for(var count = 0; count < unread_element.length; count++)
	{
		var temp_user_id = unread_element[count].dataset.id;

		var data = {
			from_user_id : from_user_id,
			to_user_id : to_user_id,
			type : 'check_unread_message'
		};

		conn.send(JSON.stringify(data));
	}
}

function upload_image()
{
	var file_element = document.getElementById('browse_image').files[0];

	var file_name = file_element.name;

	var file_extension = file_name.split('.').pop().toLowerCase();

	var allowed_extension = ['png', 'jpg'];

	if(allowed_extension.indexOf(file_extension) == -1)
	{
		alert("Invalid Image File");

		return false;
	}

	var file_reader = new FileReader();

	var file_raw_data = new ArrayBuffer();

	file_reader.loadend = function()
	{

	}

	file_reader.onload = function(event){

		file_raw_data = event.target.result;

		conn.send(file_raw_data);
	}

	file_reader.readAsArrayBuffer(file_element);
}

</script>