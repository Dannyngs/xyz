'use strict';

var Wata = {

    // Configuration of triangles
    triangles: {
        mesh: {
            depth: 11,
            slices: 50
        },
        light: {
            ambient: '#5838e6',
            diffuse: '#4efa62',
            distance: 15
        }
    },

    // Various toast messages
    toastMessages: {
        fillInRequiredFields: 'Please fill in the required fields',
        enterValidEmail: 'Please enter a valid email address',
        messageSent: "Your message has been sent. We'll get back to you soon.",
        somethingWrong: 'Something went wrong, try again. Error: '
    },

    // Currency switcher
    currencySwitcher: {
        offers: {
            standard: {
                hkd: '28,000',
                rmb: '23,800'
            },
            professional: {
                hkd: '18,000',
                rmb: '15,300'
            },
            extended: {
                hkd: '8,000',
                rmb: '6,800'
            }
        },
        symbols: {
            hkd: '$',
            rmb: '￥'
        }
    },

    // Google map position and marker name
    googleMaps: {
        lat: 34.0549946,
        lng: -118.2475384,
        zoom: 16
    }
};