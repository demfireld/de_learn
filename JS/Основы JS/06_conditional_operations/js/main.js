const a = 1;
const b = 2;
var result = a < b ? a : b;
console.log(result);

result = a < b ? a + b : a - b;
console.log(result);

console.log("hello" ?? "world");

console.log(0 ?? 5);

console.log("" ?? "JS");

console.log(false ?? true);

console.log(null ?? "not null");

console.log(undefined ?? "defined");

console.log(null ?? null);

console.log(undefined ?? undefined);

