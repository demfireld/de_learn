console.log("&&");
var isAlive;
var name = "Tom";

console.log(isAlive && name);
console.log(name && isAlive);

var isAlive = true;
var name = "Tom";

console.log(isAlive && name);
console.log(name && isAlive);

var isAlive = false;
var name = "Tom";

console.log(isAlive && name);
console.log(name && isAlive);

var isAlive = null;
var name = "Tom";

console.log(isAlive && name);
console.log(name && isAlive);

console.log("||");
var isAlive;
var name = "Tom";

console.log(isAlive || name);
console.log(name || isAlive);

var isAlive = true;
var name = "Tom";

console.log(isAlive || name);
console.log(name || isAlive);

var isAlive = false;
var name = "Tom";

console.log(isAlive || name);
console.log(name || isAlive);

var isAlive = null;
var name = "Tom";

console.log(isAlive || name);
console.log(name || isAlive);

const age = 19;
age <= 17 && console.log("Вам меньше 18 лет. Доступ запрещен.");
age > 17 && console.log("Вам больше 17 лет. Доступ разрешен.");

let x, y, c, d, a, b, e, f;
console.log("&&=");
x = true;
y = false;
y &&= x;
console.log(y);

c = false;
d = true;
c &&= d;
console.log(c);

a = true;
b = true;
a &&= b;
console.log(a);

e = false;
f = false;
e &&= f;
console.log(e);

console.log("||=");
x = true;
y = false;
y ||= x;
console.log(y);

c = false;
d = true;
c ||= d;
console.log(c);

a = true;
b = true;
a ||= b;
console.log(a);

e = false;
f = false;
e ||= f;
console.log(e);