$(document).ready(function (){

    //progress
    var progression = true;

    if(progression == false){
        $('.profile-completion-section').addClass('hide');
    }

   $('.profile-completion-header .close-btn').click(function(){
        $(this).parent().parent().fadeOut();
        var progression = true;
   });

//Toggle menu
   $('.main-container .side-bar .close-menu').click(function () {
        $('.side-bar').addClass('hide');
        $('.side-bar').removeClass('show-flex');
    });
    $('.main-container .mobile-header .mobile-menu').click(function () {
        $('.side-bar').addClass('show-flex');
        $('.side-bar').removeClass('hide');
   });

   $('.job-container:last').addClass("no-border-right");
   $('.news-container:last').addClass("no-border-right");


   //Sidebar change active class

   function addActiveClass(){
       //Remove menu highlight
    //    $(".side-bar .main-ul .menu-highlight").remove();
    //    $(".side-bar .main-ul .active").removeClass('active');

       var menuHighlight = '<div class="menu-highlight"></div>'

       if ($("#dashboard").length > 0) {
           $(".side-bar .main-ul .main-li:nth-child(1)").addClass('active');
           $(menuHighlight).prependTo('.side-bar .main-ul');
           console.log("dashboard");
       } 

       if ($("#browse-job").length > 0) {
           $(".side-bar .main-ul").find('.menu-job').addClass('active');
           $(menuHighlight).prependTo('.side-bar .main-ul:nth-child(2)');
           console.log("dashboard");
       } 
    
   }

   addActiveClass();




    class Job {
        // constructor(headline, location, description, country) {
        //     this.headline = headline;
        //     this.location = location;
        //     this.description = description;
        //     this.country = country;
        // }
        template() {
            let jobTemplate = `
			<div class="job-container col-md-4 col-sm-6">
            <h4 class="job-title">${this.headline}</h4>
            <p class="job-company"><span class="fa fa-group"></span>ScanCommerce A/S</p>
            <p class="job-location"><span class="fa fa-map-marker"></span>${this.location}, ${this.country}</p>
            <div class="job-description-container">
                <p class="detail">Description</p>
                <p class="job-description">${this.description}</p>
            </div>
              <a class="read-more" href="#">Read More <span class="fa fa-angle-right"></span></a>
            </div>
			`;
            $(jobTemplate).appendTo('.job-container');
        }
    }

   //AJAX
    $.ajax({
        type: "GET",  
        // url: "http://epico.dk/umbraco/surface/home/AllAdvertising",
        success: function (response) {
            let data = response;
            // console.log(data);

        }
    });

});

