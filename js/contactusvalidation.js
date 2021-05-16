$("form").submit(function(e){
  var error = "";

  if($("#name").val() == ""){
    error += "The name field is required (it can be just your first name).<br>"
  }

  if($("#email").val() == ""){
    error += "The email field is required.<br>"
  }

  if($("#reason").val() == ""){
    error += "The reason field is required.<br>"
  }

  if(error !=""){
    $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
    return false;
  }
  else{
    return true;
  }
});
