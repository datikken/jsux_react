import { makeObservable, observable, action } from "mobx"

export default class AuthStore {
    user = false

    constructor() {
        makeObservable(this, {
            user: observable,
            signup_user: action,
            signin_user: action
        })
    }

    signin_user() {
        alert('sginin')
    }

    signup_user() {
        alert('sginup')
    }
}
