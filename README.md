# RedditMTGMarkdown

A simple web tool to create a formatted markdown table out of a tappetout.net decklink

Tool is hosted live at: [My Website Here](https://calexil.com/redditmtg/index.html)

## What does it do?

**Short Version:** It turns this: https://tappedout.net/mtg-decks/delvernought-2026-1/

Into this:

# Mainboard

| Artifact | Instant | Creature |
|:--|:--|:--|
| 1x Aether Spellbomb | 4x Brainstorm | 4x Delver of Secrets |
| 1x Skateboard | 3x Daze | 4x Phyrexian Dreadnought |
|  | 4x Force of Will |  |
|  | 4x Stifle |  |

| Enchantment | Land | Sorcery |
|:--|:--|:--|
| 3x Dress Down | 3x Flooded Strand | 4x Flow State |
|  | 3x Polluted Delta | 4x Ponder |
|  | 4x Urza's Saga | 4x Preordain |
|  | 4x Wasteland |  |
|  | 6x Island |  |


# Sideboard

| Artifact | Enchantment | Instant |
|:--|:--|:--|
| 1x Chalice of the Void | 1x Dress Down | 2x Echoing Truth |
| 1x Grafdigger's Cage |  | 2x Spell Snare |
| 1x Pithing Needle |  | 2x Steel Sabotage |
| 1x Tormod's Crypt |  | 2x Swan Song |

| Creature | Land |
|:--|:--|
| 1x Emrakul, the Aeons Torn | 1x Mystic Sanctuary |

**Long Version:**

* Pulls a TappedOut deck via proxy
* Extracts the export block
* Recovers cards missing from the export (basic lands, etc.)
* Detects mainboard vs sideboard from the DOM
* Ignores maybeboard
* Classifies cards through Scryfall
* Generates Reddit markdown tables
* Produces valid table syntax
