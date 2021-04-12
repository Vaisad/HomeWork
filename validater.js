
let input_case = document.getElementById('input-case');
document.querySelector('#div-case-buttons > button:nth-child(1)').addEventListener('click', function() {
    input_case.value = input_case.value.toUpperCase();
});

function toLowerCase() {
    input_case.value = input_case.value.toLowerCase();
}
document.querySelector('#div-case-buttons > button:nth-child(2)').addEventListener('click', toLowerCase);

function UpperCaseFirst(value) {
    return value.charAt(0).toUpperCase() + value.slice(1);
}
document.querySelector('#div-case-buttons > button:nth-child(3)').addEventListener('click', function() {
    input_case.value = UpperCaseFirst(input_case.value);
});

let button_case = document.querySelector('#div-case-buttons > button:nth-child(4)');
if (button_case) {
    button_case.addEventListener('click', function() {
        input_case.value = input_case.value.charAt(0).toLowerCase() + input_case.value.slice(1);
    });
}



