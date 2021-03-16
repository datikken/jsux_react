/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./Main');

let shaverma = {
    meat: {
        weight: 250,
        price: 300
    },
    potatoes: {
        weight: 100,
        price: 100
    },
    tomatoes: {
        weight: 50,
        price: 100
    },
    pickles: {
        weight: 50,
        price: 200
    },
    onions: {
        weight: 10,
        price: 40
    },
    cream: {
        weight: 50,
        price: 300
    },
    peper: {
        weight: 20,
        price: 600
    }
};

function figure_out_daily_ration(obj, reps) {
    obj.total = 0;

    for (let key in obj) {
        if (typeof obj[key] != 'number') {
            let price = obj[key].weight * (obj[key].price / 1000) * reps;

            obj.total = obj.total + price;
            obj[key].price = `${price}p`;
        }
    }

    obj.reps = reps;

    return obj
}


// let daily = figure_out_daily_ration(shaverma, 90)
// console.log(daily)
