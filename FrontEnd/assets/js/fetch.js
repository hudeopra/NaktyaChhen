export async function sendData(data, path) {
    console.log("Sending data:", data); // Check the data being sent
  
    try {
      let res = await fetch(path, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      });
  
      if (res.status === 400) {
        // Handle 400 error here
        alert("Bad request: Please check your data and try again");
        return; // No need to return anything further in this case
      }
  
      let phpRes = await res.text();
      let phrasedRes = JSON.parse(phpRes);
      console.log("Parsed response:", phrasedRes.status); // Check the parsed response
  
      if (phrasedRes.status !== 200) {
        alert("Problem while sending data to the database");
        return phrasedRes.status; // Return the error status code
      } else {
        alert("Success sending data");
  
        // Explicitly return a value in successful cases
        return { status: 200, message: "Data sent successfully" }; // Example return value
      }
    } catch (e) {
      console.error("Error:", e); // Log any errors that occur
      return { status: 500, message: "Internal server error" }; // Return a generic error status code
    }
  }
