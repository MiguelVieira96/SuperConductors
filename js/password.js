$(document).ready(function(){
  $("#show_hide_password .btn").click(function(event){
    event.preventDefault();
    if($('#show_hide_password input').attr("type") == "text"){
      $('#show_hide_password input').attr('type','password');
      $('#show_hide_password i').toggleClass("fa-eye-slash fa-eye");
    }else if($('#show_hide_password input').attr("type") == "password"){
      $('#show_hide_password input').attr('type', 'text');
      $('#show_hide_password i').toggleClass("fa-eye fa-eye-slash");
    }
  });
});
