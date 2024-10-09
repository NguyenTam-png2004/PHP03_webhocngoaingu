-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2024 lúc 03:12 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php03_webhocngoaingu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answers`
--

CREATE TABLE `answers` (
  `ID` int(11) NOT NULL,
  `ID_question` int(11) NOT NULL,
  `answer_text` text NOT NULL,
  `is_correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `answers`
--

INSERT INTO `answers` (`ID`, `ID_question`, `answer_text`, `is_correct`) VALUES
(1, 1, 'Hello', 1),
(2, 1, 'Goodbye', 0),
(3, 2, 'Subject + Verb', 1),
(4, 2, 'Verb + Subject', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `ID` int(11) NOT NULL,
  `ID_language` int(11) NOT NULL,
  `name_course` varchar(100) NOT NULL,
  `course_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`ID`, `ID_language`, `name_course`, `course_order`) VALUES
(1, 1, 'Khóa Học Tiếng Anh Cơ Bản', 1),
(2, 1, 'Khóa Học Tiếng Anh Nâng Cao', 2),
(3, 2, 'Khóa Học Tiếng Pháp Cơ Bản', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `example`
--

CREATE TABLE `example` (
  `ID` int(11) NOT NULL,
  `ID_vocabulary` int(11) NOT NULL,
  `example` text NOT NULL,
  `sound` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `example`
--

INSERT INTO `example` (`ID`, `ID_vocabulary`, `example`, `sound`) VALUES
(3, 1, 'Hello! I\"ve been great, thanks!', 'image_hocngoaingu/hello.mp3'),
(4, 2, 'Hi! I\"ve been good, thanks for asking!', 'image_hocngoaingu/hi.mp3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `grammar`
--

CREATE TABLE `grammar` (
  `ID` int(11) NOT NULL,
  `ID_languages` int(11) NOT NULL,
  `name` text NOT NULL,
  `Content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `grammar`
--

INSERT INTO `grammar` (`ID`, `ID_languages`, `name`, `Content`) VALUES
(1, 1, 'Thì Hiện Tại Đơn', 'Thì hiện tại đơn được sử dụng để diễn tả một hành động thường xuyên xảy ra.'),
(2, 2, 'Thì Quá Khứ Đơn', 'Thì quá khứ đơn được sử dụng để diễn tả một hành động đã xảy ra trong quá khứ.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hethong`
--

CREATE TABLE `hethong` (
  `ID` int(11) NOT NULL,
  `TenWeb` text NOT NULL,
  `Email` text NOT NULL,
  `PassEmail` text NOT NULL,
  `DefaultAvatar` text NOT NULL,
  `MoTa` text NOT NULL,
  `TuKhoa` text NOT NULL,
  `Logo` text NOT NULL,
  `Author` text NOT NULL,
  `BaoTri` text DEFAULT NULL,
  `NoiDungBaoTri` text DEFAULT NULL,
  `GOOGLE_APP_ID` text DEFAULT NULL,
  `GOOGLE_APP_SECRET` text DEFAULT NULL,
  `GOOGLE_APP_CALLBACK_URL` text DEFAULT NULL,
  `FACEBOOK_APP_ID` text DEFAULT NULL,
  `FACEBOOK_APP_SECRET` text DEFAULT NULL,
  `FACEBOOK_APP_CALLBACK_URL` text DEFAULT NULL,
  `BASE_URL` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `languages`
--

CREATE TABLE `languages` (
  `ID` int(11) NOT NULL,
  `name_language` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `country_symbol` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `languages`
--

INSERT INTO `languages` (`ID`, `name_language`, `image`, `country_symbol`) VALUES
(1, 'Tiếng Anh', 'image_hocngoaingu/flag_english.svg', 'image_hocngoaingu/icon_english.png'),
(2, 'Tiếng Pháp', 'image_hocngoaingu/flag_french.svg', 'image_hocnoaingu/icon_french.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lessons`
--

CREATE TABLE `lessons` (
  `ID` int(11) NOT NULL,
  `ID_course` int(11) NOT NULL,
  `name_lesson` varchar(100) NOT NULL,
  `lesson_order` int(11) NOT NULL,
  `des_lessons` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lessons`
--

INSERT INTO `lessons` (`ID`, `ID_course`, `name_lesson`, `lesson_order`, `des_lessons`, `image`) VALUES
(1, 1, 'Hello!', 1, 'Learn greetings for meeting people', 'image_hocngoaingu/beginnerA1_01.jpg'),
(2, 1, 'Introducing yourself', 2, 'Say your name', 'image_hocngoaingu/beginnerA1_02.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `name_status_vocabulary`
--

CREATE TABLE `name_status_vocabulary` (
  `ID` int(11) NOT NULL,
  `name_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `progress`
--

CREATE TABLE `progress` (
  `ID` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `ID_course` int(11) NOT NULL,
  `progress_percent` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `progress`
--

INSERT INTO `progress` (`ID`, `ID_user`, `ID_course`, `progress_percent`) VALUES
(7, 1, 1, 50.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `ID` int(11) NOT NULL,
  `ID_lesson` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`ID`, `ID_lesson`, `question_text`) VALUES
(1, 1, 'What is the greeting in English?'),
(2, 2, 'How do you form the present simple tense?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_vocabulary`
--

CREATE TABLE `status_vocabulary` (
  `user_id` int(11) NOT NULL,
  `vocab_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `TokenKichHoatEmail` text DEFAULT NULL,
  `KichHoatEmail` tinyint(1) DEFAULT 0,
  `ThoiGianTokenKichHoatEmail` datetime DEFAULT NULL,
  `TokenKhoiPhucMatKhau` text DEFAULT NULL,
  `ThoiGianTokenKhoiPhucMatKhau` datetime DEFAULT NULL,
  `FacebookID` varchar(255) DEFAULT NULL,
  `IDAddress` int(11) DEFAULT NULL,
  `KinhNghiem` int(11) DEFAULT 0,
  `QuyenHan` int(11) DEFAULT 1,
  `TrangThai` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `name_user`, `email`, `password`, `image`, `TokenKichHoatEmail`, `KichHoatEmail`, `ThoiGianTokenKichHoatEmail`, `TokenKhoiPhucMatKhau`, `ThoiGianTokenKhoiPhucMatKhau`, `FacebookID`, `IDAddress`, `KinhNghiem`, `QuyenHan`, `TrangThai`) VALUES
(1, 'Nguyen Van A', 'nguyenvana@example.com', 'hashed_password1', 'image1.jpg', 'token1', 1, '2024-10-01 17:03:32', 'reset_token1', '2024-10-01 17:03:32', 'facebook_id1', 1, 3, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vocabulary`
--

CREATE TABLE `vocabulary` (
  `ID` int(11) NOT NULL,
  `ID_lesson` int(11) NOT NULL,
  `vocabulary` varchar(100) NOT NULL,
  `sound` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meaning` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vocabulary`
--

INSERT INTO `vocabulary` (`ID`, `ID_lesson`, `vocabulary`, `sound`, `image`, `video`, `description`, `meaning`) VALUES
(1, 1, 'Hello', 'hello.mp3', 'image_hocngoaingu/hello.mp4', 'image_hocngoaingu/hello.mp4', '\"Hello\" là lời chào phổ biến khi gặp gỡ hoặc bắt đầu cuộc trò chuyện với ai đó.', 'Xin chào '),
(2, 1, 'Hi', 'image_hocngoaingu/hi.mp3', 'image_hocngoaingu/hi.mp3', 'image_hocngoaingu/hi.mp3', '\"Hi\" là một lời chào thân mật, thường được dùng trong các tình huống không trang trọng, giữa bạn bè.', 'Chào '),
(3, 1, 'Nice to meet you.', 'image_hocngoaingu/nice_to_meet_you.mp4', 'image_hocngoaingu/nice_to_meet_you.mp4', 'image_hocngoaingu/nice_to_meet_you.mp4', '\"Nice to meet you\" là một cách chào lịch sự khi bạn được giới thiệu với ai đó lần đầu, thể hiện sự vui mừng khi gặp gỡ họ.', 'Rất vui được gặp bạn '),
(4, 2, 'What your name ?', 'image_hocngoaingu/what ur name.mp4', 'image_hocngoaingu/what ur name.mp4', 'image_hocngoaingu/what ur name.mp4', '\"What is your name?\" là câu hỏi thường dùng để hỏi ai đó tên của họ khi bạn gặp họ lần đầu.', 'Bạn tên là gì ?');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_question` (`ID_question`);

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_language` (`ID_language`);

--
-- Chỉ mục cho bảng `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_lesson` (`ID_vocabulary`);

--
-- Chỉ mục cho bảng `grammar`
--
ALTER TABLE `grammar`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_languages` (`ID_languages`);

--
-- Chỉ mục cho bảng `hethong`
--
ALTER TABLE `hethong`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_course` (`ID_course`);

--
-- Chỉ mục cho bảng `name_status_vocabulary`
--
ALTER TABLE `name_status_vocabulary`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_user` (`ID_user`),
  ADD KEY `ID_course` (`ID_course`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_lesson` (`ID_lesson`);

--
-- Chỉ mục cho bảng `status_vocabulary`
--
ALTER TABLE `status_vocabulary`
  ADD PRIMARY KEY (`user_id`,`vocab_id`,`status_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `vocab_id` (`vocab_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `vocabulary`
--
ALTER TABLE `vocabulary`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_lesson` (`ID_lesson`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answers`
--
ALTER TABLE `answers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `example`
--
ALTER TABLE `example`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `grammar`
--
ALTER TABLE `grammar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hethong`
--
ALTER TABLE `hethong`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `languages`
--
ALTER TABLE `languages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lessons`
--
ALTER TABLE `lessons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `name_status_vocabulary`
--
ALTER TABLE `name_status_vocabulary`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `progress`
--
ALTER TABLE `progress`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `vocabulary`
--
ALTER TABLE `vocabulary`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`ID_question`) REFERENCES `questions` (`ID`);

--
-- Các ràng buộc cho bảng `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`ID_language`) REFERENCES `languages` (`ID`);

--
-- Các ràng buộc cho bảng `example`
--
ALTER TABLE `example`
  ADD CONSTRAINT `example_ibfk_1` FOREIGN KEY (`ID_vocabulary`) REFERENCES `languages` (`ID`),
  ADD CONSTRAINT `fk_lesson` FOREIGN KEY (`ID_vocabulary`) REFERENCES `vocabulary` (`ID`);

--
-- Các ràng buộc cho bảng `grammar`
--
ALTER TABLE `grammar`
  ADD CONSTRAINT `grammar_ibfk_1` FOREIGN KEY (`ID_languages`) REFERENCES `languages` (`ID`);

--
-- Các ràng buộc cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`ID_course`) REFERENCES `courses` (`ID`);

--
-- Các ràng buộc cho bảng `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `progress_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `progress_ibfk_2` FOREIGN KEY (`ID_course`) REFERENCES `courses` (`ID`);

--
-- Các ràng buộc cho bảng `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`ID_lesson`) REFERENCES `lessons` (`ID`);

--
-- Các ràng buộc cho bảng `status_vocabulary`
--
ALTER TABLE `status_vocabulary`
  ADD CONSTRAINT `status_vocabulary_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `name_status_vocabulary` (`ID`),
  ADD CONSTRAINT `status_vocabulary_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `status_vocabulary_ibfk_3` FOREIGN KEY (`vocab_id`) REFERENCES `vocabulary` (`ID`);

--
-- Các ràng buộc cho bảng `vocabulary`
--
ALTER TABLE `vocabulary`
  ADD CONSTRAINT `vocabulary_ibfk_1` FOREIGN KEY (`ID_lesson`) REFERENCES `lessons` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
