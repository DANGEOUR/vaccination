
function myfunction() {
    let filter = document.getElementById('find').value.toUpperCase();
    let cards = document.querySelectorAll('.card');

    cards.forEach((card) => {
        let h5 = card.getElementsByTagName('h5')[0];
        let value = h5.textContent || h5.innerText; // Get the text content of the h5 element

        if (value.toUpperCase().indexOf(filter) > -1) {
            card.style.display = ""; // Show the card
        } else {
            card.style.display = "none"; // Hide the card
        }
    });
}
