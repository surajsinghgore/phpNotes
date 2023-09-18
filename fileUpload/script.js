var loadFile = function(event) {
    let msg=document.getElementById('msg');
    var output = document.getElementById('output');
    msg.style.display="none";
    output.src = URL.createObjectURL(event.target.files[0]);

    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };