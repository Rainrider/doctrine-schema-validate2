<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class Book
{
	#[
		ORM\Id(),
		ORM\GeneratedValue(),
		ORM\Column(type: 'integer'),
	]
	private ?int $id = null;

	#[ORM\Column(type: 'string', length: 255)]
	private ?string $title = null;

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getTitle(): ?string
	{
		return $this->title;
	}

	public function setTitle(string $title): void
	{
		$this->title = $title;
	}
}