function solve(arr) {

    for (let i = 0; i < arr.length; i++) {

        let name = arr[i].split(' -> ')[0];
        let age = arr[i].split(' -> ')[1];
        let grade = Number(arr[i].split(' -> ')[2]);

        let obj = {name: name, age: age, grade: grade};

        console.log("Name: " + obj.name);
        console.log("Age: " + obj.age);
        console.log("Grade: " + obj['grade'].toPrecision(3));
    }
}
