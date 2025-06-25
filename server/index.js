import express from 'express';
import nodemailer from 'nodemailer';
import cors from 'cors';
import dotenv from 'dotenv'; // ✅ Load environment variables

dotenv.config(); // ✅ Call it before using process.env

const app = express();
const PORT = process.env.PORT || 5000;

app.use(cors());
app.use(express.json());

// POST /api/contact
app.post('/api/contact', async (req, res) => {
  const { name, phone, email, type, message } = req.body;

  if (!name || !phone || !email || !type || !message) {
    return res.status(400).json({ error: 'All fields are required.' });
  }

  // Configure transporter
  let transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
      user: process.env.GMAIL_USER,
      pass: process.env.GMAIL_PASS
    }
  });

  const mailOptions = {
    from: process.env.GMAIL_USER,
    to: process.env.GMAIL_RECEIVER || process.env.GMAIL_USER,
    subject: `New Contact Form Submission from ${name}`,
    text: `Name: ${name}\nPhone: ${phone}\nEmail: ${email}\nType: ${type}\nMessage: ${message}`,
    html: `<h2>New Contact Form Submission</h2>
      <p><b>Name:</b> ${name}</p>
      <p><b>Phone:</b> ${phone}</p>
      <p><b>Email:</b> ${email}</p>
      <p><b>Type:</b> ${type}</p>
      <p><b>Message:</b><br/>${message.replace(/\n/g, '<br/>')}</p>`
  };

  try {
    await transporter.sendMail(mailOptions);
    res.status(200).json({ message: 'Email sent successfully.' });
  } catch (error) {
    console.error('❌ Email sending error:', error); // ✅ Helpful log
    res.status(500).json({ error: 'Failed to send email.' });
  }
});

app.listen(PORT, () => {
  console.log(`🚀 Server running on port ${PORT}`);
});
