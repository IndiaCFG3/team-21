<<<<<<< HEAD
function lectureLinkHandler() {
  this.event.preventDefault();
  var div = document.getElementById("video_player");
  div.classList.remove("none");
  var lecture_list = document.querySelectorAll(".link");
  lecture_list.forEach((lecture) => {
    lecture.addEventListener("click", (e) => {
      var src = lecture.firstChild.getAttribute("href");

      var iframe = document.getElementById("video");
      iframe.setAttribute("src", src);
    });
  });
}

function showSuccess() {
    alert('File Submitted Successfully');
}
=======
function lectureLinkHandler() {
  this.event.preventDefault();
  var div = document.getElementById("video_player");
  div.classList.remove("none");
  var lecture_list = document.querySelectorAll(".link");
  lecture_list.forEach((lecture) => {
    lecture.addEventListener("click", (e) => {
      var src = lecture.firstChild.getAttribute("href");

      var iframe = document.getElementById("video");
      iframe.setAttribute("src", src);
    });
  });
}

function showSuccess() {
    alert('File Submitted Successfully');
}
>>>>>>> ea97da44255d48dde39b35e4664b56039315b4a5
