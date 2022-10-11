function parse(data) {
  let val = 0;
  let finArr = [];
  const operations = data.split("");
  operations.forEach((curOp) => {
    if (curOp === "i") {
      val++;
    } else if (curOp === "d") {
      val--;
    } else if (curOp === "s") {
      val = Math.pow(val, 2);
    } else if (curOp === "o") {
      finArr.push(val);
    }
  });
  return finArr;
}

console.log(parse("iiisdoso"));
