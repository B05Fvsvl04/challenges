const primeFactors = (n) => {
  if (typeof n !== "number" && !Number.isInteger(n)) {
    throw new Error("Argument must be an integer number");
  }
  if (n < 1) {
    throw new Error("The number must be greater than 0");
  }
  let primes = [];
  for (let i = 2; i <= n; i++) {
    while (isPrime(i) && n % i === 0) {
      primes.push(i);
      n = n / i;
    }
  }
  const grouped = groupPrimes(primes);
  return finalString(grouped);
};

const isPrime = (n: number): boolean => {
  for (let i = 2; i <= Math.sqrt(n); i++) {
    if (n % i === 0) {
      return false;
    }
  }
  return true;
};

const groupPrimes = (an) => {
  return an.reduce((previous, current) => {
    previous[current] = (previous[current] || 0) + 1;
    return previous;
  }, {});
};

const finalString = (strNumber) => {
  const strBegin = "(";
  const strEnd = ")";
  let strFinal = "";
  const lastKey = Object.keys(strNumber).pop();
  for (const key in strNumber) {
    if (strNumber[key] === 1) {
      strFinal += `${strBegin}${key}${strEnd}`;
    } else {
      strFinal += `${strBegin}${key}**${strNumber[key]}${strEnd}`;
    }
    if (key !== lastKey) {
      strFinal += "*";
    }
  }
  return strFinal;
};

console.log(primeFactors(50));
