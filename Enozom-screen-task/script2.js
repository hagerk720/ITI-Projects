const form = document.getElementById("emailForm");
const email = document.getElementById("emailInput");

form.addEventListener("submit", async function (event) {
  event.preventDefault();
  var emailValue = email.value;
  try {
    const response = await axios.post(
      "https://mytask.enozom.com/BackEnd/api/GenerateAPIkey",
      {
        Email: emailValue,
      },
      {
        headers: {
          "Content-Type": "application/json",
        },
      }
    );

    let apiKey = response.data.ApiKey;
    console.log(apiKey);
    getTask(apiKey);
  } catch (error) {
    console.error("Request failed:", error);
  }
});

const getTask = async (apiKey) => {
  try {
    const response = await axios.get(
      "https://mytask.enozom.com/BackEnd/api/GetMyTask",
      {
        headers: {
          "Content-Type": "application/json",
          "x-api-key": apiKey,
        },
      }
    );

    let data = response.data.Text;
    // console.log(data, "*****", apiKey);
    convertAndSendPassword(data, apiKey);
  } catch (error) {
    console.error(error);
  }
};

const convertAndSendPassword = async (text, apiKey) => {
  const primeArray = [];
  let result = "";
  for (let i = 0; i <= text.length; i++) {
    if (isPrime(i)) {
      primeArray.push(i);
      if (i < text.length) {
        result += text[i];
      }
    }
  }
  console.log(result);

  try {
    const response3 = await axios.post(
      "https://mytask.enozom.com/BackEnd/api/SubmitResult",
      {
        Password: result,
      },
      {
        headers: {
          "Content-Type": "application/json",
          "x-api-key": apiKey,
        },
      }
    );
    console.log(response3);
  } catch (error) {
    console.error("Failed to submit solution:", error);
  }
};

function isPrime(n) {
  if (n == 1) return true;
  if (n < 1) {
    return false;
  }
  if (n <= 3) {
    return true;
  }
  if (n % 2 === 0 || n % 3 === 0) {
    return false;
  }
  for (let i = 5; i * i <= n; i += 6) {
    if (n % i === 0 || n % (i + 2) === 0) {
      return false;
    }
  }
  return true;
}
