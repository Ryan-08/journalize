$(document).ready(function () {
    $("[data-link]").click(function () {
        window.location.href = $(this).attr("data-link");
        return false;
    });
});

// const exampleModal = document.getElementById("exampleModal"); // id modal
// exampleModal.addEventListener("show.bs.modal", (event) => {
//     // Button that triggered the modal
//     const button = event.relatedTarget;
//     // Extract info from data-bs-* attributes
//     const recipient = button.getAttribute("data-bs-myevent");
//     // window.location.href = `${recipient}`;
//     // If necessary, you could initiate an AJAX request here
//     // and then do the updating in a callback.
//     //
//     // Update the modal's content.
//     const modalTitle = exampleModal.querySelector(".modal-title");
//     const modalBodyInput = exampleModal.querySelector(".modal-body input");

//     modalTitle.textContent = `${recipient}`;
//     // modalBodyInput.value = recipient;
// });
