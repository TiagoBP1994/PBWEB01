"use strict";function _classCallCheck(a,n){if(!(a instanceof n))throw new TypeError("Cannot call a class as a function")}var _createClass=function(){function a(a,n){for(var e=0;e<n.length;e++){var s=n[e];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(a,s.key,s)}}return function(n,e,s){return e&&a(n.prototype,e),s&&a(n,s),n}}();$(document).ready(function(){function a(){var a='<div class="menu-highlight"></div>';$("#dashboard").length>0&&($(".side-bar .main-ul .main-li:nth-child(1)").addClass("active"),$(a).prependTo(".side-bar .main-ul"),console.log("dashboard")),$("#browse-job").length>0&&($(".side-bar .main-ul").find(".menu-job").addClass("active"),$(a).prependTo(".side-bar .main-ul:nth-child(2)"),console.log("dashboard"))}var n=!0;$(".profile-completion-header .close-btn").click(function(){$(this).parent().parent().fadeOut();var a=!0}),$(".main-container .side-bar .close-menu").click(function(){$(".side-bar").addClass("hide"),$(".side-bar").removeClass("show-flex")}),$(".main-container .mobile-header .mobile-menu").click(function(){$(".side-bar").addClass("show-flex"),$(".side-bar").removeClass("hide")}),$(".job-container:last").addClass("no-border-right"),$(".news-container:last").addClass("no-border-right"),a();var e=function(){function a(){_classCallCheck(this,a)}return _createClass(a,[{key:"template",value:function a(){var n='\n\t\t\t<div class="job-container col-md-4 col-sm-6">\n            <h4 class="job-title">'+this.headline+'</h4>\n            <p class="job-company"><span class="fa fa-group"></span>ScanCommerce A/S</p>\n            <p class="job-location"><span class="fa fa-map-marker"></span>'+this.location+", "+this.country+'</p>\n            <div class="job-description-container">\n                <p class="detail">Description</p>\n                <p class="job-description">'+this.description+'</p>\n            </div>\n              <a class="read-more" href="#">Read More <span class="fa fa-angle-right"></span></a>\n            </div>\n\t\t\t';$(n).appendTo(".job-container")}}]),a}();$.ajax({type:"GET",success:function a(n){var e=n}})});