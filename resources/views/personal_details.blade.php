<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details Form</title>
</head>
<body>
    <h1>Personal Details Form</h1>
    <form action="{{ route('personal-details.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="jeemain_ap_no">JEE Main Application No:</label>
        <input type="text" id="jeemain_ap_no" name="jeemain_ap_no" required><br><br>

        <label for="inst_name">Institution Name:</label>
        <input type="text" id="inst_name" name="inst_name" required><br><br>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="contact_no">Contact Number:</label>
        <input type="tel" id="contact_no" name="contact_no" required><br><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required><br><br>

        <label for="alotted_category">Allotted Category:</label>
        <input type="text" id="alotted_category" name="alotted_category" required><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>

        <label for="prep">Preparation:</label>
        <select id="prep" name="prep" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>

        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode" required><br><br>

        <label for="p_ad_line_1">Address Line 1:</label>
        <input type="text" id="p_ad_line_1" name="p_ad_line_1" required><br><br>

        <label for="p_ad_line_2">Address Line 2:</label>
        <input type="text" id="p_ad_line_2" name="p_ad_line_2" required><br><br>

        <label for="blood_group">Blood Group:</label>
        <select id="blood_group" name="blood_group" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br><br>

        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality" required><br><br>

        <label for="birth_place">Place of Birth:</label>
        <input type="text" id="birth_place" name="birth_place" required><br><br>

        <label for="religion">Religion:</label>
        <select id="religion" name="religion" required>
            <option value="Hinduism">Hinduism</option>
            <option value="Islam">Islam</option>
            <option value="Christianity">Christianity</option>
            <option value="Sikhism">Sikhism</option>
            <option value="Buddhism">Buddhism</option>
            <option value="Jainism">Jainism</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*" required><br><br>

        <label for="sign">Signature:</label>
        <input type="file" id="sign" name="sign" accept="image/*" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
