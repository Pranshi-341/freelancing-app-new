<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FreeLancerController;
use Illuminate\Database\Eloquent\Model;
use DataTables;

class frontendController extends Controller
{
    function Technical(){
        $title = "Technical Help";
        $topline = "We will complete and explain complicated, technical, or specialized assignments to our customers including robotics, engineering, computer hardware and software, finance, and medical. ";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage]);
    }

    function Mathematics(){
        $title = "Do My Math Homework";
        $topline = "Hey! Essay Sages, Help Me With My Math Homework ";
        $bottomline = "Ask the Professionals At Essay Sages “Help Me With My Maths Homework”!        ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        $writers = DB::table('freelancers_writers')->get();
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }

        foreach($writers as $writers){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name;    
        }
        $main_data = array_combine($name_data, $skills_data);
        return view('frontend.maths',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'name' => $name, 'skills' => $skills,'main_data' => $main_data]);
    }

    function Physics(){
        $title = "Physics Homework Help ";
        $topline = "Excellent Physics Homework Help From Experts At Essay Sages!";
        $bottomline = "Need Help With Physics Homework? Experts At Essay Sages Are Waiting For You!";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        $writers = DB::table('freelancers_writers')->get();
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }

        foreach($writers as $writers){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name;    
        }
        $main_data = array_combine($name_data, $skills_data);
        return view('frontend.physics',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'name' => $name, 'skills' => $skills,'main_data' => $main_data]);
    }

    function Dissertation(){
        $title = "Dissertation Writing Service";
        $topline = "Custom Dissertation Writing Service By Ph.D. Writers";
        $bottomline = "Our Ph.D. writers will take care of your dissertations ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        $writers = DB::table('freelancers_writers')->get();
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }

        foreach($writers as $writers){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name;    
        }

        
        $main_data = array_combine($name_data, $skills_data);
        
        return view('frontend.dissertation',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'name' => $name, 'skills' => $skills ,'main_data' => $main_data]);
    }

    function Coursework(){
        $title = "Coursework Writing Service";
        $topline = "Custom Coursework Writing Service At Essay Sages!";
        $bottomline = "Ask Our Team Of  Experts To Help You With Custom Coursework Writing Services! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        $writers = DB::table('freelancers_writers')->get();
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }

        foreach($writers as $writers){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name;    
        }
        $main_data = array_combine($name_data, $skills_data);
        return view('frontend.coursework',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'name' => $name, 'skills' => $skills ,'main_data' => $main_data]);
    }

    function Presentations(){
        $title = "Presentations Help";
        $topline = "Our support team will create your requested Slides that will help you frame and pace a talk in your business or school presentation.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function ComputerScience(){
        $title = " Computer Science Homework Help        ";
        $topline = "Hey! Get Computer Science Homework Help From Essay Sages        ";
        $bottomline = "Ask the Professionals At Essay Sages for Computer Science Assignment Help”!        ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        $writers = DB::table('freelancers_writers')->get();
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }

        foreach($writers as $writers){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name;    
        }
        $main_data = array_combine($name_data, $skills_data);
        return view('frontend.computer-science',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'name' => $name, 'skills' => $skills ,'main_data' => $main_data]);
    }

    function AccountingEconomicsBusiness(){
        $title = "Accounting, Economics and Business Help";
        $topline = "Get Your History Assignment Help At Essay Sages!";
        $bottomline = "Get Guaranteed Good Grades In Your History Assignment With Writing Service At Essay Sages!";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        return view('frontend.accounting',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }
    function History(){
        $title = "History Assignment Help";
        $topline = "We will provide affordable and high-quality Accounting, economics, and Business-Related Assignments from our qualified experts. We will also provide additional tips linked to economics and accounting concepts to provide great value for your money. ";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        $writers = DB::table('freelancers_writers')->get();
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }

        foreach($writers as $writers){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name;    
        }
        $main_data = array_combine($name_data, $skills_data);
        return view('frontend.history',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'name' => $name, 'skills' => $skills ,'main_data' => $main_data]);
    }

    function Team(){
        $title = " Essay Writers Teams Page";
        $topline = "Hire Professional Essay Writers Online At Essay Sages";
        $bottomline = "Get your academic papers done by expert Academic Essay Writers and save
        Your time and efforts. No plagiarism, only high-quality content!";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        
        $writers = DB::table('freelancers_writers')->get();
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }
        foreach($writers as $writerss){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name; 
        }
        $main_data = array_combine($name_data, $skills_data);
        
        return view('frontend.teamspage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'skills' => $skills, 'name' => $name, 'main_data' => $main_data])->with('writers',$writers);
    }

    function ProfessionalWriters(){
        $title = "Professional Writers";
        $topline = "";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage =  'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function CompetentTutors(){
        $title = "Competent Tutors";
        $topline = "";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function LicensedResearchers(){
        $title = "Licensed Researchers";
        $topline = "";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function ContactUs(){
        $title = "Contact Us";
        $topline = "";
        $bottomline = "contact with our team to get more information ! ";
        $backgroundImage = 'linear-gradient(225deg,#00cf8a,#0084d6)';
        return view('frontend.contactpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }
   
function AboutUs(){
        $title = "About Us";
        $topline = "";
        $bottomline = "Creating an environment where our services empower our clients to live better lives.";
        $backgroundImage = 'linear-gradient(225deg,#00cf8a,#0084d6)';
        return view('frontend.aboutus',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    // createv functions for writing help 
    function Essay(Request $request){
        $title = "Hey Essay Sages! Write My Essay For Me";
        $topline = "Our Professional Essay Writing Experts Are 24*7 Available To Help You!";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        $writers = DB::table('freelancers_writers')->get();
        
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }

        foreach($writers as $writers){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name;    
        }

        
        $main_data = array_combine($name_data, $skills_data);
        return view('frontend.essayWrite',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'name' => $name, 'skills' => $skills ,'main_data' => $main_data]);
    } 

    function ResearchPaper(){
        $title = "Research Paper Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your research paper writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function Thesis() {
        $title = "Professional Thesis Writers";
        $topline = "Hire Professional Thesis Writers At Essay Sages";
        $bottomline = "Ask our writers to “Write My Thesis”        ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        $writers = DB::table('freelancers_writers')->get();
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }

        foreach($writers as $writers){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name;    
        }
        $main_data = array_combine($name_data, $skills_data);
        return view('frontend.thesis',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'name' => $name, 'skills' => $skills ,'main_data' => $main_data]);
    }

    function Assigment() {
        $title = "Assignment Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your assignment writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    // function Dissertation() {
    //     $title = "Dissertation Help";
    //     $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your dissertation writing.";
    //     $bottomline = "Make your order and get our assistance now! ";
    //     $backgroundImage = 'https://';
    //     return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    // }

    function BookReport() {
        $title = "Custom Book Report Writing Service At Essay Sages!        ";
        $bottomline = "Ask Our Team Of  Experts To Help You With Book Review Writing Service!";
        $topline = " ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        $writers = DB::table('freelancers_writers')->get();
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }

        foreach($writers as $writers){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name;    
        }
        $main_data = array_combine($name_data, $skills_data);
        return view('frontend.book-report',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'name' => $name, 'skills' => $skills ,'main_data' => $main_data]);
    }

    function Speach(){
        $title = "Speach Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your speach writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function PersonalStatement() {
        $title = "Personal Statement Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your personal statement writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function LabReport() {
        $title = "Lab Report Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your lab report writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function Homework() {
        $title = "Homework Help At Essay Sages";
        $topline = "Get Homework Help With Best Writing Experts";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.homework',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function CaseStudy() {
        $title = "Case Study Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your case study writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function LiteratureReview() {
        $title = " Writing A Literature Review";
        $topline = "Writing A Literature Review From Professional Writers At Essay Sages";
        $bottomline = "Our Experts Are There To Help You With Your Literature Review Writing!        ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        $writers = DB::table('freelancers_writers')->get();
        foreach($writers as $writer){
            $skills_data[] = json_decode($writer->skills);
            $name_data[] = $writer->name;    
        }

        foreach($writers as $writers){
            $skills = json_decode($writer->skills);
            $name[] = $writer->name;    
        }
        $main_data = array_combine($name_data, $skills_data);
        return view('frontend.literature',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage, 'name' => $name, 'skills' => $skills ,'main_data' => $main_data]);
    }

    function OrderNow(Request $request) {
      
        //$writers = freelancers_writers::orderBy('id','desc')->get();
        $writers = DB::table('freelancers_writers')->get();
        
        return view('frontend.order')->with('writers', $writers);
    }

}
