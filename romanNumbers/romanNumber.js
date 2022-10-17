let equivalences = {
  I: 1,
  V: 5,
  X: 10,
  L: 50,
  C: 100,
  D: 500,
  M: 1000,
};
function solution(roman) {
  let arr = roman.split("");
  const len = arr.length;
  let sum = 0;
  for (i = 0; i < len; i++) {
    if (i + 1 <= len && equivalences[arr[i]] < equivalences[arr[i + 1]]) {
      sum += equivalences[arr[i + 1]] - equivalences[arr[i]];
      i++;
    } else {
      sum += equivalences[arr[i]];
    }
  }
  return sum;
}

console.log(solution("MXC"));
