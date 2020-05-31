# Registration

Registration page with Google reCAPTCHA and DeBounce email validation


----------------------------------------------------------

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `joined` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

----------------------------------------------------------

INSERT INTO `register` (`id`, `username`, `email`, `joined`) VALUES
(1, 'tom', 'tom@mail.com', '2020-05-28 17:27:38'),
(2, 'bob', 'bob@mail.com', '2020-05-28 17:41:54');
