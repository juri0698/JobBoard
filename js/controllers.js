

/**
 * MainCtrl - controller
 */


function MainCtrl() {

    this.userName = 'Example user';
    this.helloText = 'Welcome in SeedProject';
    this.descriptionText = 'It is an application skeleton for a typical AngularJS web app. You can use it to quickly bootstrap your angular webapp projects and dev environment for these projects.';

};

angular
    .module('inspinia')
    .controller('MainCtrl', MainCtrl);


angular
    .module('inspinia').controller('JobsCtrl', ['$scope', '$http', '$mdDialog', function ($scope, $http, $mdDialog) {

    $http({
        method: 'GET',
        url: 'php/uploadCSVJobs.php',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(function successCallback(response){

      var jobs = response.data
      var jobstable = $('#tblJobsList tbody');
       $.each(jobs, function(i,v){
           jobstable.append("<tr>" + 
                        "<td>" + jobs[i].title + "</td>" + 
                        "<td>" + jobs[i].location + "</td>" + 
                        "<td>" + jobs[i].date + "</td>" + 
                        "<td>" + '<button class="btn btn-success" data-toggle="modal" data-target="#myModal2" onclick="showCompanyDetails('+jobs[i].id+')" ><i class="fa fa-eye fa"></i></button>' + "</td>" +
                          
                      "</tr>");
        });
        var total = jobs.length / 10; 
        if (total <= 4){
          jobstable.paginathing({
                perPage: 10,
                insertAfter: '#tblJobsList',
                containerClass: 'resInfoPagination',
                pageNumbers: true 
          }); 
        } else {
          jobstable.paginathing({
                perPage: 10,
                insertAfter: '#tblJobsList',
                containerClass: 'resInfoPagination',
                limitPagination: 5,
                pageNumbers: true 
          }); 
        }
        $("#loadingUp").modal("hide");
    });


}]);