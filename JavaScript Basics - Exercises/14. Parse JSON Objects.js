function solve(arr) {
    for (let i = 0; i < arr.length; i++) {
        let obj = JSON.parse(arr[i]);

        for (let key in obj) {
            console.log((key[0].toUpperCase() + key.slice(1) + ": " + obj[key]));
        }
    }
}