<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $title = "Mathematics Help";
        $topline = "Are you stuck with a mathematics question on an Exam or assignment? Our Experts and support team are here for your mathematics help 24/7.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage]);
    }

    function Physics(){
        $title = "Physics Help";
        $topline = "Are you stuck with a physics problem or assignment? Our experienced experts are here for you 24/7 to provide you with the perfect solutions. ";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage]);
    }

    function Dissertation(){
        $title = "Dissertation Help";
        $topline = "Our competent professional and proofreaders will polish your rough work into a sparkling gem of a dissertation, making your dissertation impactful. ";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function Coursework(){
        $title = "Coursework Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your coursework writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function Presentations(){
        $title = "Presentations Help";
        $topline = "Our support team will create your requested Slides that will help you frame and pace a talk in your business or school presentation.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function ComputerScience(){
        $title = "Computer Science Help";
        $topline = "Technical writers offer a team of highly trained specialists who offer the most economical computer science assistance through our site. Once you've made your order, our specialists will review it and submit your assignment within the time frame provided by our clients. ";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function AccountingEconomicsBusiness(){
        $title = "Accounting, Economics and Business Help";
        $topline = "We will provide affordable and high-quality Accounting, economics, and Business-Related Assignments from our qualified experts. We will also provide additional tips linked to economics and accounting concepts to provide great value for your money. ";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_0@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function SupportTeam(){
        $title = "Support Team";
        $topline = "";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
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

    // createv functions for writing help 
    function Essay(){
        $title = "Essay Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your essay writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    } 

    function ResearchPaper(){
        $title = "Research Paper Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your research paper writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function Thesis() {
        $title = "Thesis Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your thesis writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
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
        $title = "Book Report Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your book report writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
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
        $title = "Homework Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your homework writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function CaseStudy() {
        $title = "Case Study Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your case study writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function LiteratureReview() {
        $title = "Literature Review Help";
        $topline = "Our experts will perform more research and provide more detailed information and evidence on the subject of your literature review writing.";
        $bottomline = "Make your order and get our assistance now! ";
        $backgroundImage = 'https://asset.edusson.com/bundles/asterfreelance/_layout/images/EdussonCom/intro-v3/intro-v3_bg_desktop_3@2x.webp';
        return view('frontend.innerpage',['title'=> $title, 'topline'=> $topline, 'bottomline'=> $bottomline, 'backgroundImage'=> $backgroundImage ]);
    }

    function OrderNow() {
        return view('frontend.order');
    }

}
