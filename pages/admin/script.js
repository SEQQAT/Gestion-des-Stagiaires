<script>
$(document).ready(function() {
$("#basic-form").validate({
rules: {
    username : {
    required: true,
    minlength: 3
},
password: {
    required: true,
   password:required,
    min: 18
},
role: {
    required: true,
    email: true
},
messages:{
    username:{
      required:"svp entrer un nom ",
      minLenght:"Your username must consist of a least 2 characters"
    }
  },

password:{
  required:"Please provide a password",
  minLenght:"Your password must be at least 5 characters long"

}
}
})
})
      
</script>
    
