import {getUserAppData} from "./cache";

export const dateFilter = (value) => {
  const date = new Date(value);
  return date.toLocaleString(['en-US'], {
    month: 'short',
    day: '2-digit',
    year: 'numeric'
  })
};

export const comparer = (otherArray) => {
  return function (current) {
    return otherArray.filter(function (other) {
      return other.app_id == current.app_id
    }).length == 0;
  }
};



/*exporting all the utils function*/
export default {
  redirectTo: comparer
};

