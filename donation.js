function handleDonationSubmit(form) {
    const proceed = confirm("Do you want to proceed with this donation?");

    if (!proceed) {
        return false;
    }

    const toast = document.getElementById("donation-toast");
    if (toast) {
        toast.classList.add("show");
    }

    setTimeout(function () {
        form.submit();
    }, 1200);

    return false;
}
