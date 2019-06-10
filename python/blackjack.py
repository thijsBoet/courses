import simplegui
import random

CARD_SIZE = (72, 96)
CARD_CENTER = (36, 48)
card_images = simplegui.load_image(
    "http://storage.googleapis.com/codeskulptor-assets/cards_jfitz.png")

CARD_BACK_SIZE = (72, 96)
CARD_BACK_CENTER = (36, 48)
card_back = simplegui.load_image(
    "http://storage.googleapis.com/codeskulptor-assets/card_jfitz_back.png")

in_play = False
outcome = ""
score = 0

dealer = None
player = None
status = ""

SUITS = ('C', 'S', 'H', 'D')
RANKS = ('A', '2', '3', '4', '5', '6', '7', '8', '9', 'T', 'J', 'Q', 'K')
VALUES = {'A': 1, '2': 2, '3': 3, '4': 4, '5': 5, '6': 6,
          '7': 7, '8': 8, '9': 9, 'T': 10, 'J': 10, 'Q': 10, 'K': 10}

class Card:
    def __init__(self, suit, rank):
        if (suit in SUITS) and (rank in RANKS):
            self.suit = suit
            self.rank = rank
        else:
            self.suit = None
            self.rank = None
            print "Invalid card: ", suit, rank

    def __str__(self):
        return self.suit + self.rank

    def get_suit(self):
        return self.suit

    def get_rank(self):
        return self.rank

    def draw(self, canvas, pos):
        card_loc = (CARD_CENTER[0] + CARD_SIZE[0] * RANKS.index(self.rank),
                    CARD_CENTER[1] + CARD_SIZE[1] * SUITS.index(self.suit))
        canvas.draw_image(card_images, card_loc, CARD_SIZE, [
                          pos[0] + CARD_CENTER[0], pos[1] + CARD_CENTER[1]], CARD_SIZE)

class Hand:
    def __init__(self):
        self.card = []

    def __str__(self):
        for card in self.card:
            print str(card)

    def add_card(self, card):
        self.card.append(card)

    def get_value(self):
        value = 0
        for card in self.card:
            value += VALUES[card.get_rank()]
        for card in self.card:
            if(card.get_rank() == 'A' and (value+10) <= 21):
                value += 10
        return value

    def draw(self, canvas, pos):
        j = 0
        for i in self.card:
            i.draw(canvas, [pos[0]+(j*75), pos[1]])
            j += 1



class Deck:
    def __init__(self):
        tempDeck = []
        j = 0
        for suit in SUITS:
            for rank in RANKS:
                tempDeck.append(Card(suit, rank))
            j += 1
        self.deck = tempDeck

    def shuffle(self):
        random.shuffle(self.deck)


    def deal_card(self):
        card = self.deck[0]
        self.deck.pop(0)
        return card

    def __str__(self):
        sentence = ""
        for card in self.deck:
            sentence += card.get_suit()+card.get_rank()
        return sentence



deck = Deck()


def deal():
    global outcome, in_play, dealer, player, score, status

    if in_play:
        score -= 1
    status = "Hit or Stand ?"
    outcome = ""
    deck = Deck()
    deck.shuffle()

    dealer = Hand()
    player = Hand()
    dealer.add_card(deck.deal_card())
    dealer.add_card(deck.deal_card())
    player.add_card(deck.deal_card())
    player.add_card(deck.deal_card())
    in_play = True


def hit():
    global player, in_play, outcome, score, deck
    if in_play:
        player.add_card(deck.deal_card())
        if player.get_value() > 21:
            outcome = "You went bust and You Lose!"
            score -= 1
            in_play = False

def stand():
    global dealer, in_play, outcome, player, score, deck, status

    if in_play:
        while dealer.get_value() < 17:
            dealer.add_card(deck.deal_card())

        if dealer.get_value() > 21:
            outcome = "Dealer went bust and You Win!"
            score += 1
        elif dealer.get_value() > player.get_value():
            outcome = "Dealer Win and You Lose!"
            score -= 1
        elif dealer.get_value() < player.get_value():
            outcome = "Dealer Lose and You Win!"
            score += 1
        elif dealer.get_value() == player.get_value():
            outcome = "Dealer Win and You Lose!"
            score -= 1
        status = "New Deal?"
        in_play = False

def draw(canvas):
    global dealer
    canvas.draw_text("BlackJack", (50, 100), 100, "Darkred")  # title
    canvas.draw_text("Dealer", (50, 150), 25, "Darkred", "sans-serif")  # dealer
    canvas.draw_text(outcome, (250, 150), 20, "Darkred", sens-serif)  # dealer
    # dealer hand
    pos = [10, 175]
    dealer.draw(canvas, pos)
    if in_play:
        canvas.draw_image(card_back, CARD_BACK_CENTER, CARD_BACK_SIZE, [
                          pos[0]+CARD_BACK_CENTER[0], pos[1]+CARD_BACK_CENTER[1]], CARD_BACK_SIZE)
    canvas.draw_text("Player", (50, 350), 25, "Black")  # player
    canvas.draw_text(status, (250, 350), 20, "Black")
    canvas.draw_text("score: " + str(score), (50, 550), 25, "Black")
    # Player hand
    pos = [10, 375]
    player.draw(canvas, pos)

frame = simplegui.create_frame("Blackjack", 600, 600)
frame.set_canvas_background("Green")

frame.add_button("Deal", deal, 200)
frame.add_button("Hit",  hit, 200)
frame.add_button("Stand", stand, 200)
frame.set_draw_handler(draw)

deal()
frame.start()