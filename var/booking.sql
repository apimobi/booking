-- --------------------------------------------------------

--
-- Structure de la table `housing`
--

CREATE TABLE `housing` (
  `id` int(11) NOT NULL,
  `housing_type_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `default_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `housing`
--

INSERT INTO `housing` (`id`, `housing_type_id`, `name`, `default_price`) VALUES
(1, 1, 'villa1', 500),
(2, 1, 'villa2', 450),
(3, 1, 'villa3', 390),
(4, 2, 'flat1', 280),
(5, 2, 'flat2', 245),
(6, 2, 'flat3', 190);

-- --------------------------------------------------------

--
-- Structure de la table `housing_type`
--

CREATE TABLE `housing_type` (
  `id` int(11) NOT NULL,
  `description` varchar(80) NOT NULL,
  `max_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `housing_type`
--

INSERT INTO `housing_type` (`id`, `description`, `max_capacity`) VALUES
(1, 'villa', 10),
(2, 'flat', 3);

-- --------------------------------------------------------

--
-- Structure de la table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `housing_id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `daily_price` decimal(10,0) NOT NULL,
  `weekly_price` decimal(10,0) NOT NULL,
  `monthly_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `prices`
--

INSERT INTO `prices` (`id`, `housing_id`, `date_start`, `date_end`, `daily_price`, `weekly_price`, `monthly_price`) VALUES
(1, 1, '2016-10-01', '2016-10-14', '500', '400', '300'),
(2, 1, '2016-10-15', '2016-10-31', '410', '390', '290'),
(3, 1, '2016-09-01', '2016-09-30', '359', '329', '319'),
(4, 2, '2016-09-01', '2016-11-30', '999', '888', '777'),
(5, 3, '2016-10-01', '2016-10-31', '333', '222', '111'),
(6, 2, '2016-10-01', '2016-10-30', '321', '221', '121'),
(7, 2, '2016-11-01', '2016-11-30', '344', '244', '144');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `housing_id` int(11) NOT NULL,
  `owner_reservation` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `date_in`, `date_out`, `housing_id`, `owner_reservation`) VALUES
(1, '2016-10-04', '2016-10-07', 1, 0),
(2, '2016-10-24', '2016-10-31', 1, 0),
(3, '2016-10-01', '2016-10-11', 2, 1),
(4, '2016-10-23', '2016-10-29', 2, 0),
(5, '2016-11-01', '2016-11-30', 3, 0),
(6, '2016-09-01', '2016-11-30', 4, 1),
(7, '2016-09-01', '2016-10-08', 5, 0),
(8, '2016-10-05', '2016-10-06', 6, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `housing`
--
ALTER TABLE `housing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_room_type` (`housing_type_id`);

--
-- Index pour la table `housing_type`
--
ALTER TABLE `housing_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_housing` (`housing_id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_housing` (`housing_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `housing`
--
ALTER TABLE `housing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `housing_type`
--
ALTER TABLE `housing_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `housing`
--
ALTER TABLE `housing`
  ADD CONSTRAINT `room_room_type` FOREIGN KEY (`housing_type_id`) REFERENCES `housing_type` (`id`);

--
-- Contraintes pour la table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_housing` FOREIGN KEY (`housing_id`) REFERENCES `housing` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_housing` FOREIGN KEY (`housing_id`) REFERENCES `housing` (`id`);
