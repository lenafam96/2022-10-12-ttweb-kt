function Del(name) {
        return confirm("Bạn có chắc chắn muốn xoá sách: " + name + " ?");
    }

function inputValid(e,flag=true) {
  let invalidChars = ["-", "+", "e", "E"];
  if(!flag) invalidChars.push("0")
  if (invalidChars.includes(e.key)) {
    e.preventDefault();
  }
}