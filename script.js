function validateForm(event) {

    event.preventDefault();

    let form = document.getElementById('animal sighting');
    let firstname = document.getElementById('first_name').value;
    let lastname= document.getElementById('last_name').value;
    let animalclass = document.getElementById('animal_class').selectedIndex;


    if (firstname == "" || lastname == "" || animalclass <= 0) {
        alert("Please fill out all fields. First name and last name cannot be empty. An animal class must be selected.");
    } else {
        form.submit();
    }
}