
function showAlert(message, type) {
    var alertDiv = document.createElement('div');
    alertDiv.className = 'alert-message alert-' + type;
    alertDiv.innerHTML = message;
    document.body.appendChild(alertDiv);

    setTimeout(function () {
        alertDiv.style.display = 'none';
        alertDiv.remove();
    }, 3000); // Hiển thị trong 3 giây
}
