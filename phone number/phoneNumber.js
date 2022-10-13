function validPhoneNumber(phoneNumber) {
  let regex = /^\(\d*\)\s\d*-\d*$/i;
  return regex.test(phoneNumber);
}

console.log(validPhoneNumber("(123) 456-7890a"));
