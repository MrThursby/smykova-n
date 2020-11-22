<?php


namespace App\Repositories\Posts\Articles;


use Composer\Package\PackageInterface;
use Composer\Repository\BaseRepository;

class ArticleCommentRepository extends BaseRepository
{

    /**
     * Count elements of an object
     * @link https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count()
    {
        // TODO: Implement count() method.
    }

    /**
     * Checks if specified package registered (installed).
     *
     * @param PackageInterface $package package instance
     *
     * @return bool
     */
    public function hasPackage(PackageInterface $package)
    {
        // TODO: Implement hasPackage() method.
    }

    /**
     * Searches for the first match of a package by name and version.
     *
     * @param string $name package name
     * @param string|\Composer\Semver\Constraint\ConstraintInterface $constraint package version or version constraint to match against
     *
     * @return PackageInterface|null
     */
    public function findPackage($name, $constraint)
    {
        // TODO: Implement findPackage() method.
    }

    /**
     * Searches for all packages matching a name and optionally a version.
     *
     * @param string $name package name
     * @param string|\Composer\Semver\Constraint\ConstraintInterface $constraint package version or version constraint to match against
     *
     * @return PackageInterface[]
     */
    public function findPackages($name, $constraint = null)
    {
        // TODO: Implement findPackages() method.
    }

    /**
     * Returns list of registered packages.
     *
     * @return PackageInterface[]
     */
    public function getPackages()
    {
        // TODO: Implement getPackages() method.
    }

    /**
     * Searches the repository for packages containing the query
     *
     * @param string $query search query
     * @param int $mode a set of SEARCH_* constants to search on, implementations should do a best effort only
     *
     * @return array[] an array of array('name' => '...', 'description' => '...')
     */
    public function search($query, $mode = 0)
    {
        // TODO: Implement search() method.
    }
}
