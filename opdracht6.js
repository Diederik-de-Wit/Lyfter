console.time('findValue')
function findValue(challenge, value, path) {
    if (challenge === null) {

    } else if (typeof challenge == 'object') {
        for (key in challenge) {
            findValue(challenge[key], value, path + key + ' > ');
        }
    } else if (challenge === value){
        console.log(path.slice(0,-2)+ " = dailyprogrammer");
    }
}
var challenge1 = require("./challenge1.json");
var challenge2 = require("./challenge2.json");

console.log("Challenge 1 : ");findValue(challenge1, "dailyprogrammer", "");
console.log("Challenge 2 : ");findValue(challenge2, "dailyprogrammer", "");
console.log("Time : ");console.timeEnd('findValue')