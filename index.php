class LibraryItem {
  protected $title;
  protected $author;
  protected $available;

  public function __construct($title, $author) {
    $this->title = $title;
    $this->author = $author;
    $this->available = true;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($title) {
    $this->title = $title;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function setAuthor($author) {
    $this->author = $author;
  }

  public function isAvailable() {
    return $this->available;
  }

  public function checkOut() {
    $this->available = false;
  }

  public function checkIn() {
    $this->available = true;
  }
}

class Book extends LibraryItem {
  protected $ bookNum;

  public function getbookNum() {
    return $this->bookNum;
  }

  public function setbookAvail($bookNum) {
    $this->bookNum = $bookNum;
  }
}

class DVD extends LibraryItem {
  protected $duration;

  public function getDuration() {
    return $this->duration;
  }

  public function setDuration($duration) {
    $this->duration = $duration;
  }
}

// Create instances of Book and DVD classes
$book = new Book("Alemenor", "Eyob Mamo");
$book->setbookNum("978-3-16-148410-0");

$dvd = new DVD("Esat wey Abeba", "Tsegaye Gebremedhin");
$dvd->setDuration("2 hours 28 minutes");

// Test check-out and check-in functionality
echo "Book Title: " . $book->getTitle() . "\n";
echo "Book Author: " . $book->getAuthor() . "\n";
echo "Book Number: " . $book->getbookNum() . "\n";
echo "Book Availability: " . ($book->isAvailable() ? "Available" : "Not Available") . "\n";

$book->checkOut();

echo "Book Availability after check-out: " . ($book->isAvailable() ? "Available" : "Not Available") . "\n";

$book->checkIn();

echo "Book Availability after check-in: " . ($book->isAvailable() ? "Available" : "Not Available") . "\n";

echo "DVD Title: " . $dvd->getTitle() . "\n";
echo "DVD Author: " . $dvd->getAuthor() . "\n";
echo "DVD Duration: " . $dvd->getDuration() . "\n";
echo "DVD Availability: " . ($dvd->isAvailable() ? "Available" : "Not Available") . "\n";