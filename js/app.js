

const sum1 = [1, 2, 3, 4].reduce((partialSum, a) => partialSum + a, 0);
console.log(sum1);

console.log("next"); console.log("next");

function range(arr) {
    var array = [];
    var lower = Math.min(arr[0], arr[1]);
    var upper = Math.max(arr[0], arr[1]);

    for (var i = lower; i <= upper; i++) {
        array.push(i);
    }
    return array;
}

function sum(array) {
    var total = 0;
    for (var i = 0; i < array.length; i++) {
        total = total + array[i];
    }
    return total;
}

console.log('range ' + range([1, 10]));
console.log('sum ' + sum(range([1, 10])));

console.log("xz v cjom raznica "); console.log("taska n2 i n3 ");


function create(arr) {
    var array = [];
    var lower = Math.min(arr[0], arr[1]);
    var upper = Math.max(arr[0], arr[1]);

    for (var i = lower; i <= upper; i++) {
        array.push(i);
    }
    return array;
}

function sum(array) {
    var total = 0;
    for (var i = 0; i < array.length; i++) {
        total = total + array[i];
    }
    return total;
}

console.log('range - create funktion ' + range([1, 10]));
console.log('sum updated create funktion ' + sum(range([1, 10])));

console.log("next")

const points = [40, 100, 2, 5, 25, 10];
console.log('here is some numbers  ' + points);
let rrr = points.sort(function (a, b) { return a - b });
console.log('here is lowest ' + (rrr[0]));



console.log("task 5 see at js page")




