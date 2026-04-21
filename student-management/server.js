const express = require("express");
const dotenv = require("dotenv");
const connectDB = require("./dbConfig");
const studentRoutes = require("./routes/studentRoutes");

dotenv.config();

const app = express();
const PORT = process.env.PORT || 3000;

app.use(express.json());

app.get("/", (req, res) => {
  res.json({ message: "Student Management API is running." });
});

app.use("/students", studentRoutes);

app.use((req, res) => {
  res.status(404).json({ message: "Route not found." });
});

app.use((err, req, res, next) => {
  console.error(err);

  if (err.name === "CastError") {
    return res.status(400).json({ message: "Invalid student ID." });
  }

  if (err.code === 11000) {
    return res.status(409).json({ message: "Email already exists." });
  }

  if (err.name === "ValidationError") {
    return res.status(400).json({ message: err.message });
  }

  return res.status(500).json({ message: "Internal server error." });
});

const startServer = async () => {
  try {
    await connectDB();
    app.listen(PORT, () => {
      console.log(`Server is running on port ${PORT}.`);
    });
  } catch (error) {
    console.error("Failed to start server:", error.message);
    process.exit(1);
  }
};

startServer();
