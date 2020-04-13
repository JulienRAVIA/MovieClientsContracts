<?php

namespace Xylis\MovieClientsContracts;

interface FilmInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return string
     */
    public function getOriginalTitle(): string;

    /**
     * @return int
     */
    public function getProductionYear(): int;

    /**
     * @return \DateTime
     */
    public function getRuntime(): \DateTime;

    /**
     * @return array
     */
    public function getDirectors(): array;

    /**
     * @return array
     */
    public function getActors(): array;

    /**
     * @return array
     */
    public function getGenres(): array;

    /**
     * @return array
     */
    public function getNationalities(): array;

    /**
     * @return \DateTime Release date
     */
    public function getReleaseDate(): \DateTime;

    /**
     * @return array Spoken languages
     */
    public function getSpokenLanguages(): array;

    /**
     * @return string Film plot
     */
    public function getSynopsis(): string;

    /**
     * @return string Poster url
     */
    public function getPoster(): string;
}