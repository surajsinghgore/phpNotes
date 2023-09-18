var loadFile = function (event) {
  let msg = document.getElementById("msg");
  var output = document.getElementById("output");

  // validate image only send to server
  if (
    event.target.files[0].type == "image/png" ||
    event.target.files[0].type == "image/jpg" ||
    event.target.files[0].type == "image/jpeg" ||
    event.target.files[0].type == "image/gif"
  ) {
    document.getElementById("btn").disabled = false;
    msg.style.display = "none";
    output.src = URL.createObjectURL(event.target.files[0]);
  }
  // give error if image on upload by user
  else {
    msg.style.display = "block";
    msg.innerText =
      "Only Png, Jpg, Jpeg and Gif image allowed to upload in files";
    document.getElementById("output").setAttribute("src", "");
    document.getElementById("btn").disabled = true;
    document.getElementById("btn").style.cursor = "not-allowed";
  }

  output.onload = function () {
    URL.revokeObjectURL(output.src); // free memory
  };
};
