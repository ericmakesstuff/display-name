<?php

namespace EricMakesStuff\DisplayName;

class DisplayName
{
    /**
     * Create a new DisplayName Instance
     */
    public function __construct()
    {
        // constructor body
    }

    public function show($name, $method = 'firstNameLastInitial')
    {
        if (method_exists($this, $method)) {
            return $this->{$method}($name);
        }

        return '';
    }

    public function fullName($name)
    {
        return $name;
    }

    public function firstName($name)
    {
        $parsed_name = $this->parseName($name);

        return array_shift($parsed_name);
    }

    public function firstNameLastInitial($name)
    {
        $parsed_name = $this->parseName($name);

        $name = array_shift($parsed_name);

        if (count($parsed_name)) {
            $name .= ' ' . strtoupper($parsed_name[(count($parsed_name) - 1)][0]);
        }

        return $name;
    }

    public function firstNameLastInitialWithPeriod($name)
    {
        $parsed_name = $this->parseName($name);

        $name = array_shift($parsed_name);

        if (count($parsed_name)) {
            $name .= ' ' . strtoupper($parsed_name[(count($parsed_name) - 1)][0]) . '.';
        }

        return $name;
    }

    public function initials($name)
    {
        return implode('', $this->getInitialsArray($name));
    }

    public function initialsWithPeriods($name)
    {
        if (empty($name))
            return '';

        return implode('.', $this->getInitialsArray($name)) . '.';
    }

    public function initialsWithSpaces($name)
    {
        return implode(' ', $this->getInitialsArray($name));
    }

    protected function getInitialsArray($name)
    {
        $initials = array();

        foreach ($this->parseName($name) as $word) {
            if (!empty($word)) {
                $initials[] = strtoupper($word[0]);
            }
        }

        return $initials;
    }

    protected function parseName($name)
    {
        return explode(' ', trim($name));
    }
}
