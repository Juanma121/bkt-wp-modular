module.exports = {
    "environment": process.env.NODE_ENV || "production",
    "imgPath": "./src/img",
    "fontPath": "./src/fonts",
    "jsPath": "./src/js",
    "jsAdminPath": "./src/js-admin",
    "jsLoginPath": "./src/js-login",
    "sassPath": "./src/sass",
    "vendorPath": "./src/vendor",
    "destPath": "./dist",
    "devUrl": process.env.DEVELOPMENT_URL || "",
    "vendor": {
        "sass": [
            './node_modules/@fortawesome/fontawesome-free/scss',
            './node_modules/bootstrap/scss'
        ],
        "css": [],
        "js": [
            './node_modules/bootstrap/dist/js/bootstrap.min.js'
        ],
        "fonts": [
            './node_modules/@fortawesome/fontawesome-free/webfonts/*'
        ]
    },
    "uglify": {
        "admin": {
            "mangle": {
                "reserved": [],
                "toplevel": false
            }
        },
        "front": {
            "mangle": {
                "reserved": [],
                "toplevel": true
            }
        },
        "login": {
            "mangle": {
                "reserved": [],
                "toplevel": true
            }
        }
    }
};