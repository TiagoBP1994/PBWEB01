$(document).ready(function (){

   $('.profile-completion-header .close-btn').click(function(){
        $(this).parent().parent().fadeOut();
   });

//Toggle menu
   $('.main-container .side-bar .close-menu').click(function () {
        $('.side-bar').addClass('hide');
        $('.side-bar').removeClass('show-flex');
   });

   $('.mobile-header .mobile-menu').click(function () {
        $('.side-bar').addClass('show-flex');
        $('.side-bar').removeClass('hide');
   });

   $('.job-container:last').addClass("no-border-right");
   $('.news-container:last').addClass("no-border-right");

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
        url: "http://epico.dk/umbraco/surface/home/AllAdvertising",
        success: function (response) {
            let data = response;
            console.log(data);

        }
    });

});

