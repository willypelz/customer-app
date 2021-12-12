import {ENV} from '../env';
import CryptoJS from "crypto-js";
import {APP_KEY} from "../config";

/*to get user token*/
export const getToken = () => {
    return window.localStorage.getItem(ENV.AUTH_KEY);
};
/*to register the token*/
export const saveToken = token => {
    window.localStorage.setItem(ENV.AUTH_KEY, token);
};
/*save ums user data*/
export const saveUserData = (UMSUserData) => {
    const encryptedUserData = CryptoJS.AES.encrypt(JSON.stringify(UMSUserData), APP_KEY);
    // window.localStorage.setItem(ENV.USER_DATA, encryptedUserData);
};
/*to get the userData information*/
export const getUserData = () => {
    const UMSUserData = window.localStorage.getItem(ENV.USER_DATA);
    // if (UMSUserData) {
    //     const bytes = CryptoJS.AES.decrypt(UMSUserData.toString(), APP_KEY);
    //     return JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
    // }
};

/*logout function */
export const logoutUser = () => {
    window.localStorage.removeItem(ENV.USER_DATA);
 };


/*exporting all the cache function*/
export default {
    logoutUser, getUserData
};

