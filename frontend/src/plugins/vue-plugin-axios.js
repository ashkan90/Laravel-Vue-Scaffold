import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-plugin-axios'

const baseApiURL = 'http://127.0.0.1:8000/api/' // 'This is your base api path'

Vue.use(VueAxios, {
    axios,
    config: {
        baseURL: baseApiURL,
        headers: {
            // so laravel will understand that this is ajax $request->ajax()
            'X-Requested-With': 'XMLHttpRequest',
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
        }
    },
    interceptors: {
        /*beforeRequest (config, axiosInstance) {
            if (config.baseURL === baseApiURL) {
                const token = store.state.auth.token

                if (token) {
                    config.headers.Authorization = `Bearer ${token}`
                }
            }

            return config
        },
        beforeResponseError (error) {
            const { response, message } = error

            if (response) { // backend error
                showServerError(response)

                // if 401
            } else if (message) { // network error
                vp.$notify.error(message)
            }

            // return Promise.reject(error)
        }*/
    }
})
