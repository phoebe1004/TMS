function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

// For edit

// $(document).on('click','.open_modal',function(){
//   var url = "domain.com/yoururl";
//   var tour_id= $(this).val();
//   $.get(url + '/' + tour_id, function (data) {
//       //success data
//       console.log(data);
//       $('#tour_id').val(data.id);
//       $('#name').val(data.name);
//       $('#details').val(data.details);
//       $('#btn-save').val("update");
//       $('#myModal').modal('show');
//   }) 
// });