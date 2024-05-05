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
            return;
        }
        let phpRes = await res.text();
        let phrasedRes = JSON.parse(phpRes);
        console.log(JSON.parse(phpRes));
        if (phrasedRes.status!==200) {
            alert("Problem while sending data to the database");
        }
        else{
            alert("Success sending data");
        }
        console.log("Response from server:", phrasedRes.message); // Print the response message to the console
    } catch (e) {
        console.error("Error:", e); // Log any errors that occur
    }
}
