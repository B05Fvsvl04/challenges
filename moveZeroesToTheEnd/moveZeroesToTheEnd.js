let moveZeros = (items) => {
  let filteredList = items.filter((item) => {
    return item != 0 || item != 0.0;
  });
  let zeroList = items.filter((item) => {
    return item === 0 || item === 0.0;
  });
  return filteredList.concat(zeroList);
};

console.log(moveZeros([1, 0, 2]));
