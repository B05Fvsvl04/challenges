function domainName(url) {
  return url
    .replace("https://", "")
    .replace("http://", "")
    .replace("www.", "")
    .split(".")[0];
}

console.log(domainName("http://github.com/carbonfive/raygun"));
